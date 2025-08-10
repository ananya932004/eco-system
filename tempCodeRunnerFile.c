#include <stdio.h>
int main()
{
        int n,orate,size,pkt[50],i;
    printf("enter the bucket size");
    scanf("%d",&n);
    printf("enter the total number of packets");
    scanf("%d",&size);
    printf("enter the output rate");
    scanf("%d",&orate);
    for(i=0;i<n;i++){
        printf("enter the %d packet size",i+1);
        scanf("%d",pkt[i]);
    }
    for(i=0;i<n;i++){
        if(pkt[i]>size){
            printf("the %d pacts will be discarded",i+1);
        }
        while(pkt[i]!=0)
        {
            if(pkt[i]>orate){
                printf("from paket %d,%d bytes are transmitted",i+1,orate);
                pkt[i]=pkt[i]-orate;
            }
        else{
               printf("the pakets %d are directly transmitted",pkt[i]);
             pkt[i]=0;
             }
     }
printf("pakets %d are completly transmitted",i+1);
    }
    return 0;
}