# GDrive Link Download or Streaming Generator

Berfungsi meng-generate files google drive agar bisa dibuat untuk Streaming atau Direct Download tanpa Limit.

## What's

Project ini bisa berjalan pada localhost server atau webhosting server. Berbasis engine PHP.

### API Master
```
GET : https://api.heirro.net/developers/gdrive/get.json
```

### API deployment, result service Endpoint:

Core data:
```
GET : /gdrive/get.json?u={link_gdrive}
```

Download link auto generate:
```
GET : /gdrive/dl.js?gid={google_id}
```

Embeded video auto generate with jWplayer:
```
GET : /gdrive/embed.js?key={keyfiles}
```
## Authors

* **Vava Heirro** - *Initial work* - [Heirro](https://github.com/heirro)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## [Demo Project](https://apps.heirro.net/gdrive/) | ## [Demo Get API](https://api.heirro.net/developers/gdrive/get.json?u=https://drive.google.com/open?id=1Q4zicZoBlI4NwSkyi1HV8ff0ggUHHWpd)
