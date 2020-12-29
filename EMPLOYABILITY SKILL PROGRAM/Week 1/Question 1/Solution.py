#Write a program to enter two numbers and check whether the first one is multiple of second number or not.

number1 = int(input("Enter first number: "))
number2 = int(input("Enter Second number: "))

if (number1 % number2 == 0):
    print(number1, "is multiple of", number2)
else:
    print(number1, "is not a multiple of", number2)