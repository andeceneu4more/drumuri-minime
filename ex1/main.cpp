#include <fstream>
#include <vector>
#include <queue>
#include <climits>
#define w 52001
using namespace std;
struct nod{unsigned int c,v;};
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
unsigned int d[w];
void dij()
{
    nod t,r;unsigned int i;
    while (!q.empty())
    {
        t=q.top();
        q.pop();
        for (i=0;i<a[t.v].size();i++)
        {
            r=a[t.v][i];
            if (d[r.v]>d[t.v]+r.c)
            {
                d[r.v]=d[t.v]+r.c;
                q.push(nod{d[r.v],r.v});
            }
        }
    }
}
int main()
{
    ifstream f("dijkstra.in");
    ofstream g("dijkstra.out");
    unsigned int n,i,m,x,y,cost;
    f>>n>>m;
    for (i=1;i<=m;i++)
    {
        f>>x>>y>>cost;
        a[x].push_back(nod{cost,y});
    }
    for (i=2;i<=n;i++) d[i]=INT_MAX;
    q.push(nod{0,1});
    dij();
    for (i=2;i<=n;i++)
    {
        if (d[i]==INT_MAX) g<<"0 ";
        else g<<d[i]<<" ";
    }
    g<<'\n';
    f.close();
    g.close();
    return 0;
}
