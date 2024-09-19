#include <stdio.h>

void main(){
    int tahun,bulan,minggu,hari;
    int tampthn,tampbln,tampmg,tamphr,tamp;
    printf("Input Jumlah Hari: ");
    scanf("%d",&hari);
    tampthn = hari/360;
    tamp = hari % 360;
    tampbln = tamp / 7;
    tamp = tamp % 7;
    printf("%d tahun\n%d bulan",tampthn,tampbln);
}