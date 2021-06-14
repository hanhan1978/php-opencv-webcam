#include "opencv2/opencv.hpp"
#include "opencv2/highgui/highgui_c.h"
#include "iostream"

extern "C" int snapshot() {
    cv::VideoCapture cap(0);
    if(!cap.isOpened())
    {
        //can not open camera device
        return -1;
    }

    cv::Mat frame;
    cap.read(frame);
    cv::imwrite("img.png", frame);
    return 0;
}