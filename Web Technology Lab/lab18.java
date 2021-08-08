import java.util.Scanner;
class  TestOverloading{
public static void main(String args[]){
int a,b;
float c,d;
System.out.println("enter two no.:");
Scanner obj=new Scanner(System.in);
a=obj.nextInt();
b=obj.nextInt(); 
System.out.println("Addition="+add(a,b));
System.out.println("enter two no.:");
c=obj.nextFloat();
d=obj.nextFloat(); 
System.out.println("Addition="+add(c,d));
}
public static int add(int a,int b){
return a+b;}
public static float add(float a,float b){
return a+b;}
}
