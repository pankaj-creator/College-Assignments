num1 = int(input("Enter First Number "))
num2 = int(input("Enter Last Number "))

for num in range(num1,num2):
  temp=num
  sum=0
  while temp>0:
    digit=temp%10
    sum=sum+digit**3
    temp=temp//10

  if sum==num:
    print (num)