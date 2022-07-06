# Basic instructions

Create the image

```bash
docker build -t "my-php-app" .
```

Run docker container with a memory limit

```
docker run --rm -it --memory=1000m -p 8000:80 my-php-app
```

# Cgroups analysis

Run docker container in iteractive mode

```
  docker run --rm -it --memory=1000m -p 8000:80 my-php-app /bin/bash
```

Once we are inside the container we can run the following commands:

- Get cgroups info

```bash
  grep cgroup /proc/mounts
```

- Get the memory limit inside the container

```bash
  cat /sys/fs/cgroup/memory/memory.limit_in_bytes
```

# Useful links

- Cgroups:

https://docs.docker.com/config/containers/runmetrics/

- Mode info about memory.limit_in_bytes:

https://www.kernel.org/doc/Documentation/cgroup-v1/memory.txt

Real author: Angel A.

Thanks to Angel, please contact me to add your email here. Thanks again!
