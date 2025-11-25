#!/bin/bash

# Deploy script for kapadia-portfolio
echo "🚀 Starting deployment process..."

# Stop and remove existing container
echo "📦 Stopping existing container..."
docker stop kapadia-site 2>/dev/null || true
docker rm kapadia-site 2>/dev/null || true

# Remove old image
echo "🗑️  Removing old image..."
docker rmi kapadia-portfolio 2>/dev/null || true

# Build new image
echo "🔨 Building new image..."
docker build -t kapadia-portfolio .

# Run new container
echo "🏃 Starting new container..."
docker run -d -p 8080:80 --name kapadia-site kapadia-portfolio

# Check status
echo "✅ Checking deployment status..."
sleep 2
if docker ps | grep -q kapadia-site; then
    echo "🎉 Deployment successful!"
    echo "🌐 Your site is running at: http://localhost:8080"
    echo "📊 Container status:"
    docker ps | grep kapadia-site
else
    echo "❌ Deployment failed!"
    echo "📋 Container logs:"
    docker logs kapadia-site
    exit 1
fi
