/*c++ program to calculate rank of the page*/
#include<iostream.h>
#include<iomanip.h>
#include<math.h>
#include<conio.h>
int main(){
	clrscr();
	cout.precision(3);
	cout.setf(ios::fixed);
	int n,i,j;
	cout<<"\n Enter the number of nodes:"<<endl; //get the no of nodes i.e order of matrix
	cin>>n;
	double A[10][10],T[10][10],b[10],c[10],k,eps,y,count,ans=0; //declare arrays and variables
	cout<<"\n Enter the adjacency matrix values row wise:\n";
	for(i=0;i<n;i++) //get the elements of the adjacency matrix
		for(j=0;j<n;j++)
			cin>>A[i][j];
	for(i=0;i<n;i++)
		for(j=0;j<n;j++){
			if(A[j][i]==1)
			{
				for(k=0;k<n;k++)
				{
					if(A[j][k]==1)
						count++;
				}
				T[i][j]=1/count;
			count=0;
		}
		}
	cout<<"\nEnter the initial eigen value:"<<endl; //get the initial value for eigen value
	for(i=0;i<n;i++)
		cin>>b[i];
	cout<<"Transition Matrix is"<<endl;
	for(i=0;i<n;i++){
		for(j=0;j<n;j++)
		{
		cout<<T[i][j]<<"\t";
		}
	cout<<endl;
	}
	cout<<"\n Enter the accuracy desired:\n";
	cin>>eps;
	do
	{
		y=k;
		for(i=0;i<n;i++) //calculate T*b as T is matrix and b is eigen value
		{
			c[i]=0;
			for(j=0;j<n;j++)
			c[i]=c[i]+T[i][j]*b[j]; //after all iterations T*b=c
		}
		k=abs(c[0]);
		for(i=1;i<n;i++)
			k=abs(c[i]>k?abs(c[i]):k);
		for(i=0;i<n;i++)
			b[i]=c[i]/k;
		}while(abs(k-y)>eps);
	cout<<"The Eigen Value is: "<<k<<endl;
	cout<<"\n The Eigen Vector is ["; //eigen vector
	for(i=0;i<n;i++)
		cout<<b[i]<<setw(9);
	for(i=0;i<n;i++)
		for(j=0;j<n;j++)
			b[i]=b[i]+T[i][j];
	for(i=0;i<n;i++)
		ans=ans+b[i];
	for(i=0;i<n;i++)
		b[i]=b[i]/(1.0*ans);
	cout<<"]\n";
	cout<<"The Web Ratings are as follows"<<endl; //display the ratings
	for(i=0;i<n;i++)
		cout<<"x"<<i+1<<"="<<b[i]<<endl;
	getch();
	return 0;
}