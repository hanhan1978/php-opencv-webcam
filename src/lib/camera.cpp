#include "opencv2/opencv.hpp"
#include "opencv2/highgui/highgui_c.h"
#include "iostream"

extern "C" int snapshot(const char* s) {
    cv::VideoCapture cap(0);
    if(!cap.isOpened())
    {
        //can not open camera device
        return -1;
    }

    cv::Mat frame;
    cap.read(frame);
    cv::imwrite(s, frame);
    return 0;
}