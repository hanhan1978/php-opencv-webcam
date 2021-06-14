
CFLAGS =
CC = g++
DEST = src/lib

all: shared

shared:
	$(CC) $(CFLAGS) -fPIC -shared -o $(DEST)/camera.so $(DEST)/camera.cpp `pkg-config --cflags --libs opencv4`

.PHONY: clean
clean:
	$(RM) src/lib/*.so
