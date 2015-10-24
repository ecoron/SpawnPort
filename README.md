#SpawnPort

A @PocketMine MCPE server plugin. Allows player teleporting to the worldspawn.
For mcpe 01.11.1 / 0.12.1 api 1.12.0 / 1.13.0 

##Download and Install

Download the SpawnPort.phar

### [Download: SpawnPort.phar](https://s3-eu-west-1.amazonaws.com/devron/SpawnPort.phar)


and copy the file into your plugins folder.

restart your server.

##Usage / Command

```
/spawn
```

oder

```
/spawnport
```

##Permissions

anyone can use this command. there is no permission check implemented yet, in this version. 

```
permissions:
 spawnport.command:
  description: "Allows the user to teleport to worldspawn"
  default: true
 spawnport.bypass:
  description: "Allows to have admin features"
  default: op
```