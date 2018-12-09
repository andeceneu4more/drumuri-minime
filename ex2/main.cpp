#include <fstream>
#include <vector>
#include <queue>
#include <climits>
#define w 50001
using namespace std;
struct nod{int c,v;};
class prio
{
    public:
    bool operator ()(nod &p1 ,nod&p2)
    {
        return p1.c>p2.c;
    }
};
priority_queue <nod, vector <nod>, prio> q;
vector <nod> a[w];
bool viz[w];
int cnt[w];
int d[w];
int main()
{
    ifstream f("bellmanford.in");
    ofstream g("bellmanford.out");
    int t,i,n,m,x,y,cost,negc=0;
    nod r;
    f>>n>>m;
    for (i=1;i<=m;i++)
    {
        f>>x>>y>>cost;
        a[x].push_back(nod{cost,y});
    }
    for (i=2;i<=n;i++)
        d[i]=INT_MAX;
    q.push(nod{0,1});viz[1]=1;cnt[1]++;
    while ( (!q.empty()) && (!negc) )
    {
        t=q.top().v;
        q.pop();viz[t]=0;
        for (i=0;i<a[t].size();i++)
        {
            r=a[t][i];
            if (d[r.v]>d[t]+r.c)
            {
                d[r.v]=d[t]+r.c;
                if (!viz[r.v])
                {
                    if (cnt[r.v]>n) negc=1;
                    else
                    {
                        q.push({d[r.v],r.v});
                        viz[r.v]=1;
                        cnt[r.v]++;
                    }
                }
            }
        }
    }
    if (negc)
        g<<"Ciclu negativ!\n";
    else
    {
        for (i=2;i<=n;i++)
        {
            g<<d[i]<<' ';
        }
        g<<'\n';
    }
    f.close();
    g.close();
    return 0;
}
