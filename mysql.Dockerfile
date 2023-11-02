FROM mysql:8.0.19
COPY ./dump/db_a.sql /docker-entrypoint-initdb.d/init.sql