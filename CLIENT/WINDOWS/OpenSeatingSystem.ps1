 $type = (get-netconnectionProfile).InterfaceAlias 
 $name = (get-netconnectionProfile).Name
 $Myname= Get-Content C:\Windows\System32\NetworkName.txt

 if ($type -eq "Wi-Fi" -Or "Ethernet" -and  $name -eq $Myname)
 {
 	
 	$SourceIP=(Get-NetIpaddress -InterfaceAlias Wi-Fi -AddressFamily ipv4|Select IPAddress).IPAddress
 	$SourceMAC=(Get-NetAdapter -Name 'Wi-Fi').MacAddress
 	$RouterIP=(Get-WmiObject -Class Win32_IP4RouteTable | where { $_.destination -eq '0.0.0.0' -and $_.mask -eq '0.0.0.0'} | 	Sort-Object metric1 | select nexthop).nexthop
 	$RouterMAC=arp -a $RouterIP | select -Last 1 | %{ $_.Split(' ')[13]; }
 	$postParams=@{rmac=$RouterMAC;smac=$SourceMAC;sip=$SourceIP}
    Invoke-WebRequest -Uri http://localhost/honeywell/update.php -Method POST -Body $postParams
 }
 