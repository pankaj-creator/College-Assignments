// Write a C program to implement data link layer framing method (Bit Stuffing).

#include <stdio.h>
#include <conio.h>
#include <string.h>
void main()
{
    int a[20], b[30], i, j, k, count, n;
    //    clrscr();
    printf("Enter frame size that is total no. of bits: ");
    scanf("%d", &n);
    printf("Enter each of the frames that is bits in the form of 0 and 1): ");
    for (i = 0; i < n; i++)
        scanf("%d", &a[i]);
    i = 0;
    count = 1;
    j = 0;
    while (i < n)
    {
        if (a[i] == 1)
        {
            b[j] = a[i];
            for (k = i + 1; a[k] == 1 && k < n && count < 5; k++)
            {
                j++;
                b[j] = a[k];
                count++;
                if (count == 5)
                {
                    j++;
                    b[j] = 0;
                }
                i = k;
            }
        }
        else
        {
            b[j] = a[i];
        }
        i++;
        j++;
    }

    printf("After Bit Stuffing: ");
    for (i = 0; i < j; i++)
        printf("%d", b[i]);
    getch();
}
