@ECHO OFF
ECHO Интерфейсы:
netsh interface ip show interface
SET /p IFACE="Выберите интерфейс: "
ECHO Происходит настройка
netsh interface ip SET address %IFACE% dhcp
netsh interface ip SET dns %IFACE% dhcp
ECHO Готово!
ipconfig /all
PAUSE




@ECHO OFF
echo Интерфейсы:
netsh interface ip show interface
set /p IFACE="Выберите интерфейс: "
set /p IP="Введите IP-адрес интерфейса: "
set /p MASK="Введите маску сети: "
set /p GATEWAY="Введите адрес шлюза: "
set /p DNS1="Введите предпочитаемый DNS-сервер: "
echo Установленные настройки применяются...
netsh interface ip set address %IFACE% static %IP% %MASK% %GATEWAY%
netsh interface ip set dns %IFACE% static %DNS1% primary
echo Готово!
ipconfig /all
pause