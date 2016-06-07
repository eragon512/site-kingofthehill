#include<stdio.h>
#include<stdlib.h>

int main()
{
	printf("Content-Type:text/html;charset=utf-8");
	printf("<title>Assignment</title>\n");
	
	char *data = getenv("QUERY_STRING"),str[501];
	int num;
	
	if(sscanf(data,"number=%d",&num))
		printf("%d\n",num+1);
	else if(sscanf(data,"number=%s",str))
		printf("%s+1",str);
	printf("\n");
	return 0;
}
