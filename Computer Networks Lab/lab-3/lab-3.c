// Write a program to implement data link layer framing method (character count).

#include<stdio.h>
#include<conio.h>
#include<string.h>
char data[30][30];
int n;
void main()
{
	int i, ch, j;
	char tmp[30][30];
//	clrscr();
	printf("Enter the no of frames:\n");
	scanf("%d",&n);
	for(i=0;i<=n;i++)
	{
		if(i!=0)
		{
			printf("frame %d: ",i);
			fflush(stdin);
			gets(data[i]);
		}
	}
	//saving frame with count and data
	for(i=0;i<=n;i++)
	{
		tmp[i][0]=49+strlen(data[i]);
		tmp[i][1]='\0';
		strcat(tmp[i],data[i]);	
	}
	printf("\n\t\t At the Sender: \n");
	printf("Data as frames: \n");
	for(i=1;i<=n;i++)
	{
		printf("Frame %d: ",i);
		puts(tmp[i]);
	}
	printf("Data transmitted");
	for(i=1;i<=n;i++)
	{
		printf("%s",tmp[i]);
	}
	printf("\n\t\t At the Receiver: \n");
	printf("Data Received: \n");
	for(i=1;i<=n;i++)
	{
		ch=(int)(tmp[i][0]-49);
		for(j=1;j<=ch;j++)
		{
			data[i][j-1]=tmp[i][j];
			data[i][j-1]='\0';
		}
		printf("The data after removing count character :\n");
		for(i=1;i<=n;i++)
			printf("%s",data[i]);
			printf("\n the data in the frame form: \n");
			for(i=1;i<=n;i++)
			{
				printf("Frame%d:",i);
				puts(data[i]);
			}
		getch();
	}
}
