#include<cmath>
#include<iostream>
using namespace std;

int main()
{
	int T;
	cin>>T;
	while(T--)
	{
		string A,B;
		cin>>A>>B;
		int N=A.length(),i,mismatch[2]={0},no_1s=0,count=0;
		
		for(i=0;i<N;++i)
		{
			if(A[i] == '1')
				no_1s++;
			if(A[i] != B[i])
			{
				if(A[i] == '1')
					mismatch[1]++;
				else
					mismatch[0]++;
			}
		}
		int no_0s = N - no_1s;
		//cout<<no_0s<<" "<<mismatch[1]<<"\n";
		count = min(mismatch[1],mismatch[0]);
		mismatch[1] -= count;
		mismatch[0] -= count;
		
		if(mismatch[1] > 0 && no_0s == 0)
		{
			cout<<"Unlucky Chef\n";
			continue;
		}
		else if(mismatch[0] > 0 && no_1s == 0)
		{
			cout<<"Unlucky Chef\n";
			continue;
		}
		else
		{
			cout<<"Lucky Chef\n";
			
			if(mismatch[1] && no_0s > 0)
				count += mismatch[1];
			else if(mismatch[0] && no_1s > 0)
				count += mismatch[0];
			cout<<count<<"\n";
		}
	}
	return 0;
}
