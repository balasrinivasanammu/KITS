#include<stdio.h>
void main()
{
	int a=10,b=15,c=70,d=20,e=50;
	int result=(a>b && a>c && a>d && a>e)?a:(b>c && b>d && b>e)?b:(c>d && c>e)?c:(d>e)?d:e;
	printf("%d",result);
}
