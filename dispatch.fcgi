#!/bin/sh
export NODE_PATH=node_modules
#echo `dirname "$0"`
cd `dirname "$0"`
#ls
exec ./fcgi-shim node server.js 1>&2
