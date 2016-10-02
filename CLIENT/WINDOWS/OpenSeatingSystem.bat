@echo off
:: BatchGotAdmin (Run as Admin code starts)
REM --> Check for permissions
>nul 2>&1 "%SYSTEMROOT%\system32\cacls.exe" "%SYSTEMROOT%\system32\config\system"
REM --> If error flag set, we do not have admin.
if '%errorlevel%' NEQ '0' (
echo Requesting administrative privileges...
goto UACPrompt
) else ( goto gotAdmin )
:UACPrompt
echo Set UAC = CreateObject^("Shell.Application"^) > "%temp%\getadmin.vbs"
echo UAC.ShellExecute "%~s0", "", "", "runas", 1 >> "%temp%\getadmin.vbs"
"%temp%\getadmin.vbs"
exit /B
:gotAdmin
if exist "%temp%\getadmin.vbs" ( del "%temp%\getadmin.vbs" )
pushd "%CD%"
CD /D "%~dp0"
:: BatchGotAdmin (Run as Admin code ends)
:: Your codes should start from the following line
powershell Set-ExecutionPolicy RemoteSigned 
powershell -windowstyle hidden -command ./Firsttime.ps1
powershell  -windowstyle hidden -command ./OpenSeatingSystem.ps1
copy NetworkName.txt C:\Windows\System32
copy OpenSeatingSystem.ps1 C:\Windows\System32
copy OpenSittingSystemSchedule.ps1 C:\Windows\System32
copy honeywellOpenSeatingSystem.ps1 C:\Windows\System32
powershell.exe -file OpenSittingSystemSchedule.ps1 