# A program that automatically uploads any and all media saved to the Pictures folder to my website (into a specific folder for Uploads allowing me to organize it as I feel)

serverDirectory = '/home/dh_9mx6wk/funandpractice.dreamhosters.com/wp-content/themes/astra-child/Media'
webAddress = 'https://funandpractice.dreamhosters.com/personal-media/'
newUploadDirectory = serverDirectory + '/New Uploads'

fileToUpload = 'D:\iCloud Photos\Other\Wallpaper\Celebrities\Emily Kinney\16686725876374265150625656653281.png'

from paramiko import SSHClient
from scp import SCPClient
ssh = SSHClient()
ssh.load_system_host_keys()
ssh.connect('dh_9mx6wk@iad1-shared-d12-03.dreamhost.com:/home/dh_9mx6wk/funandpractice.dreamhosters.com/wp-content/themes/astra-child/Media/New Uploads')
with SCPClient(ssh.get_transport()) as scp:
    scp.put(fileToUpload) # Copy my_file.txt to the server