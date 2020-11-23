FROM httpd
COPY . /usr/local/apache2/htdocs/
RUN curl http://localhost:8080
RUN if [ $? -eq 0 ] \
then \
  echo "Successfully created file" \
else \
  echo "Could not create file" >&2 \
fi