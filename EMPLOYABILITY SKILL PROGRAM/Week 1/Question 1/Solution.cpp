#include <iostream>
using namespace std;

int main() {
    int num1, num2;

    cout << "Enter the first number:";
    cin >> num1;

    cout << "Enter the Second number:";
    cin >> num2;

    if (num1 % num2 == 0)
        cout << "First number", num1, "is multiple of second number";
    else
        cout << "First number", num1, "is not multiple of second number";

    return 0;
}