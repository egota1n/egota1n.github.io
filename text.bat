@ECHO OFF
SET /p name=Введите название сетевого интерфейса, который хотите настроить:
SET /p option=Как Вы хотите настраивать сетевой интерфейс (1 - автоматически через DHCP, 2 - вручную)?:
IF /i "%option%"=="1" (
netsh interface ip set address name="%name%" dhcp ) ELSE IF /i "%option%"=="2" (
SET /p ip=Введите IP-адрес:
SET /p mask=Введите максу подсети:
SET /p gateway=Введите шлюз по умолчанию:
netsh interface ip set address name="%name%" static %ip% %mask% %gateway%
) ELSE (
ECHO Вы ввели неправильное число... Запустите файл еще раз и повторите попытку
)


@echo off
chcp 1251
echo Доступные интерфейсы:
netsh interface ip show interface
set /p IFACE="Выберите интерфейс: "
echo Происходит настройка...
netsh interface ip set address %IFACE% dhcp
netsh interface ip set dns %IFACE% dhcp
echo Готово!
ipconfig /all
pause


@echo off
chcp 1251
echo Доступные интерфейсы:
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


Write-Host "Доступные интерфейсы:"
Get-NetAdapter -Name *
$ifindex = Read-Host "Выберите интерфейс и введите его индекс"
$ip = Read-Host "Введите IP-адрес интерфейса"
$mask = Read-Host "Введите маску сети (например, 24)"
$gateway = Read-Host "Введите адрес шлюза"
$dns1 = Read-Host "Введите предпочитаемый DNS-сервер"
Write-Host "Установленные настройки применяются..."
New-NetIPAddress -InterfaceIndex $ifindex -IPAddress $ip -PrefixLength $mask -DefaultGateway $gateway
Set-DnsClientServerAddress -InterfaceIndex $ifindex -ServerAddress $dns1
Write-Host "Готово!"
ipconfig /all
Get-NetAdapter | Select-Object -Property Name, InterfaceDescription, FullDuplex, LinkSpeed




Write-Host "Доступные интерфейсы:"
Get-NetAdapter -Name *
$ifindex = Read-Host "Выберите интерфейс и введите его индекс"
Write-Host "Настройки устанавлиаются..."
Get-NetIPInterface -InterfaceIndex $ifindex | Remove-NetRoute -Confirm:$false
Set-NetIPInterface -InterfaceIndex $ifindex -Dhcp Enabled
Set-DnsClientServerAddress -InterfaceIndex $ifindex -ResetServerAddresses
Write-Host "Готово!"
ipconfig /all
Get-NetAdapter | Select-Object -Property Name, InterfaceDescription, FullDuplex, LinkSpeed