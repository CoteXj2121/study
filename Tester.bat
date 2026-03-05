@echo off
REM run_launcher_working.bat - one-click runner for launch_working.ps1
REM Place this .bat in the same folder as launch_working.ps1 and double-click it.
powershell -NoProfile -ExecutionPolicy Bypass -File "%~dp0launch_working.ps1"
