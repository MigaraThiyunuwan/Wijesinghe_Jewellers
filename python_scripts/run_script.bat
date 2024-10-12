@echo off
REM Activate the virtual environment
call "D:\UWU\Wijesinghe Jewellers\Wijesinghe_Jewellers\python_scripts\myvenv\Scripts\activate.bat"

REM Run the Python script with the provided arguments
python "D:\UWU\Wijesinghe Jewellers\Wijesinghe_Jewellers\python_scripts\main.py" %1 %2 %3

REM Deactivate the virtual environment
deactivate
