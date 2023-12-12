main()
{
	int b=10;
	baby(&b);
	printf("address of b=%x",&b);
}
void baby(int *a)
{
	printf("baby age=%d\n",*a);
	printf("address of a=%x\n",a);
	printf("original address of a=%x\n",&a);

}
