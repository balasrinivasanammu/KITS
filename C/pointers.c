main()
{
	int a=10;
	int *b=&a;
	int **c=&b;
	int ***d=&c;
	int ****e=&d;
	printf("%d\n",a);
	printf("%x\n",&a);
	printf("%x\n",&b);
	printf("%x\n",&c);
	printf("%x\n",&d);
	printf("%x\n",&e);
	
	printf("-----------\n");
	
	printf("%x\n",b);
	printf("%x\n",c);
	printf("%x\n",d);
	printf("%x\n",e);
	
	printf("-----------\n");
	
	printf("%d\n",*b);
	printf("%d\n",**c);
	printf("%d\n",***d);
	printf("%d\n",****e);
}/*
