FROM jaisocx/webserver:2.0

COPY ./conf /usr/lib/jaisocx-http/apps/congratulations/conf

WORKDIR /usr/lib/jaisocx-http

CMD "java" "-Xms${JAVA_XMS}" "-Xmx${JAVA_XMX}" "-jar" "out/artifacts/jaisocx_http_jar/jaisocx-http.jar" "-nogui"

EXPOSE 80
