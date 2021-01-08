#include <stdio.h>
#include <conio.h>
 
int getCubicSumOfDigits(int number);
int main(){
    int number, sum, counter;
    printf("Enter the number 0 to ");
    scanf("%d", &number);
    printf("Armstrong numbers between 0 and %d\n", number);
    /* Iterate from 0 till N, and check for Armstrong number */
    for(counter = 0; counter <= number; counter++){
        sum = getCubicSumOfDigits(counter);
        if(sum == counter){
            printf("%d\n", counter);
        }
    }
    getch();
    return 0;
}
 
/*
 * Funtion to calculate the sum of cubes of digits of a number
 * getCubicSumOfDigits(123) = 1*1*1 + 2*2*2 + 3*3*3;
 */
int getCubicSumOfDigits(int number){
    int lastDigit, sum = 0;
    while(number != 0){
        lastDigit = number%10;
        sum = sum + lastDigit*lastDigit*lastDigit;
        number = number/10;
    }
    return sum;
}