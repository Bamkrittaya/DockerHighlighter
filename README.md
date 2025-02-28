# DockerHighlighter
A simple Docker-based application for uploading and processing text files.

## Installation & Setup
### 1. Clone the Repository
```bash
git clone https://github.com/Bamkrittaya/Docker-highlighter.git
cd Docker-highlighter
``` 

### 2. Build & Run with Docker
```bash
docker-compose up --build
```

### 3. Access the Application
Open a browser and visit:
```arduino
http://localhost:8888
```

## Troubleshooting
### Check Docker Logs
```bash
docker-compose logs
```

### Restart a Specific Service
```bash
docker-compose restart uploader
```

### Database Issues
If filedb.db is missing, recreate it:
```bash
docker-compose down
rm -rf db/
docker-compose up --build
```



