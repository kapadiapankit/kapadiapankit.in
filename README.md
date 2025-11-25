# Pankit Kapadia - Frontend Developer

It is a static web page with the introduction of the owner. 

You can visit the web page through this link:
https://kapadiapankit.in

## Docker Development Commands

### Build the Image
```bash
docker build -t kapadiapankit .
```

### Run the Container
```bash
docker run --rm -d -p 8080:80 --name kapadiapankit-app kapadiapankit
```

### Stop the Container
```bash
docker stop kapadiapankit-app
```

### Restart the Container
```bash
docker restart kapadiapankit-app
```

### Hot Reloading (Development Mode)
To see changes instantly without rebuilding, mount your local directory to the container:
```bash
docker run --rm -d -p 8080:80 -v $(pwd):/var/www/html --name kapadiapankit-app kapadiapankit
```
*Note: This maps your current folder to the web root in the container. Any change you make to files will be immediately visible on refresh.*
