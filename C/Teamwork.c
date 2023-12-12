//Team work and Communication - Design calc work - Team basis
#include<stdio.h>
#include<string.h>
void main()
{
	int a=3;
	char b[20]="Balaji srinivasan tamilnadu";
	int num=50;
	chennai(a);
	manglore(a);
	vijayawada(b);
	mumbai(num);
}
void chennai(int a)
{
	int i,count=0;
	for(i=2;i<=a;i++){
		if(a%i==0)
		 count++;
	}
	if(count==1)
	 printf("\n it is a prime number");
	else
	 printf("\n it is not a prime number");
}

void manglore(a)
{
int i,j;
char c='a';
printf("\n");
for(i=0;i<a;i++)
{
	for(j=0;j<=i;j++)
	{
		printf("%c",c+j);
	}
	printf("\n");
	}	
}
void mumbai(int num)
{
	long int fact=1;int i;
	for(i=1;i<=num;i++)
	{
		fact=fact*i;
	}
	printf("\nFactorial of %d is %ld",num,fact);
}

void vijayawada(char b[])
 {int x=strlen(b),i;
 for (i=x-1;i>=0;i--){
 	printf("%c",b[i]);
 }
 
}
