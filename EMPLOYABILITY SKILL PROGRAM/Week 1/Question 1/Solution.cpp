#include <stdio.h>
#include<iostream>

using namespace std;
int main()
{
    int num1, num2;
    cout<<"Enter the Two Numbers: ";
    cin>>num1>>num2;
    if (num1 % num2 == 0) // checks to see if number1 is a multiple of number2
         cout << "true"; // if so then print out "true"

         else
         cout << "false";

    cout<<endl;
    return 0;
}