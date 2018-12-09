#include <fstream>
using namespace std;
int a[20][20];
char s1[30]="<td width=|501|>&nbsp;</td>";
char s2[25]="<td width=|501|>";
char s3[10]="</td>";
char s4[10]="<tr>";
char s5[10]="</tr>";
char s6[10]="<td>";
int main()
{
    ifstream fin("table.in");
    ofstream fout("table.out");
    int n,m,i,j;
    s1[10]=s1[14]=s2[10]=s2[14]='"';
    fin>>n>>m;
    for (i=1;i<=n;i++)
        for (j=1;j<=m;j++)
            fin>>a[i][j];
    fout<<s4<<'\n';
    fout<<s1<<'\n';
    for (i=1;i<=m;i++)
        fout<<s2<<i<<s3<<'\n';
    fout<<s5<<'\n';
    for (i=1;i<=n;i++)
    {
        fout<<s4<<'\n'<<s6<<i<<s3<<'\n';
        for (j=1;j<=m;j++)
        {
            fout<<s6<<a[i][j]<<s3<<'\n';
        }
        fout<<s5<<'\n';
    }
    fin.close();
    fout.close();
    return 0;
}
