# launch_working.ps1
# Simple, ASCII-only PowerShell launcher that finds PHP files recursively and runs them.
# Save this file into your "study" folder (the folder that contains "Введение в ООП", "Полиморфизм", "Наследование").
# Then double-click the included run_launcher_working.bat or run the .ps1 from PowerShell.

$php = "C:\xampp\php\php.exe"

# Determine script directory (works when run from PowerShell or via .bat)
$scriptDir = Split-Path -Parent $MyInvocation.MyCommand.Definition
if (-not $scriptDir) { $scriptDir = (Get-Location).ProviderPath }

Set-Location $scriptDir

Write-Host ""
Write-Host "========================================="
Write-Host "   PHP TASK LAUNCHER (WORKING, ASCII)"
Write-Host "========================================="
Write-Host ""

$tasks = Get-ChildItem -Path . -Recurse -Filter *.php -File | Sort-Object FullName

if ($null -eq $tasks -or $tasks.Count -eq 0) {
    Write-Host "No PHP files found under: $scriptDir"
    Read-Host "Press Enter to exit"
    exit
}

$files = @{}
$i = 1
foreach ($t in $tasks) {
    $files[$i] = $t.FullName
    Write-Host ("{0,2}) {1}" -f $i, $t.FullName)
    $i++
}

Write-Host ""
Write-Host ("{0,2}) Run ALL" -f $i)
Write-Host " 0) Exit"
Write-Host ""

$choice = Read-Host "Enter number"

if ($choice -eq "0") {
    exit
}

if ($choice -eq [string]$i) {
    foreach ($f in $files.Values) {
        Write-Host ""
        Write-Host "Running: $f"
        Write-Host "-----------------------------------"
        & $php $f 2>&1
        Write-Host "-----------------------------------"
    }
    Read-Host "Done. Press Enter to exit"
    exit
}

if ($files.ContainsKey([int]$choice)) {
    $file = $files[[int]$choice]
    if (Test-Path $file) {
        Write-Host ""
        Write-Host "Running: $file"
        Write-Host "-----------------------------------"
        & $php $file 2>&1
        Write-Host "-----------------------------------"
        Read-Host "Done. Press Enter to exit"
    } else {
        Write-Host "File not found: $file"
        Read-Host "Press Enter to exit"
    }
} else {
    Write-Host "Invalid selection"
    Read-Host "Press Enter to exit"
}
