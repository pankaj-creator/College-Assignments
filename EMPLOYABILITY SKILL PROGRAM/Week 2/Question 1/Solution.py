import math
import os
import random
import re
import sys

def StringsComparision(s1, s2, s3):
    # Write your code here
    d = []
    s = ""
    d.append(s1)
    d.append(s2)
    d.append(s3)
    d.sort()
    for i in d:
        s+=i
    return s

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')
    first_String = input()
    second_String = input()
    third_String = input()
    result = StringsComparision(first_String, second_String, third_String)
    fptr.write(result + '\n')
    fptr.close()