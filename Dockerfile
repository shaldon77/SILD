FROM mcr.microsoft.com/devcontainers/php:1-8.2-bookworm


# Instalar cliente de MySQL en lugar de MariaDB
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get install -y default-mysql-client curl gnupg \
    && apt-get clean -y && rm -rf /var/lib/apt/lists/*

# Instalar extensiones necesarias para Laravel
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Instalar Node.js 20
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Verificar versiones instaladas
RUN php -v && composer -V && node -v && npm -v && npx -v && mysql --version

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar el código de la aplicación
COPY . .

# Instalar dependencias de Node y compilar assets
RUN npm install && npm run build
