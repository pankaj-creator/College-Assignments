// Write a C program to implement data link layer framing method (Character Stuffing).

#include<stdio.h>
#include<conio.h>
#include<string.h>
void main()
{
	char msgIn[999], msgOut[999];
	int i, j=0, len;
//	clrscr();
	printf("Enter the Message: ");
	gets(msgIn);
	len=strlen(msgIn);
	for(i=0;i<len;i++)
	{
		if(msgIn[i]=='s' || msgIn[i]=='d' || msgIn[i]=='e')
			msgOut[j++]='d';
			msgOut[j++]=msgIn[i];
	}
	printf("After Stuffing \n");
	printf("%s",msgOut);
	getch();
}