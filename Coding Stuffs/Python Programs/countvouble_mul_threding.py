from threading import Thread
import time
import random
from multiprocessing import Queue
#from Queue import Queue

queue = Queue(10)

def isVowel(ch): 
    return ch.upper() in ['A', 'E', 'I', 'O', 'U', 'a','e','i','o','u'] 
  
# Returns count of vowels in str  
def task_done(file): 
    count = 0
    for i in range(len(file)): 
  
        # Check for vowel 
        if isVowel(file[i]): 
            count += 1
    return count 

class ProducerThread(Thread):
    def run(self):
        str = input("Enter your Text")
        global queue
        while True:
            file = str
            queue.put(file)
            print ("Produced", file)
            time.sleep(random.random())


class ConsumerThread(Thread):
    def run(self):
        global queue
        while True:
            file = queue.get()
            print ("Total Count of (a,e,i,o,u) is ", task_done(file))
            time.sleep(random.random())


ProducerThread().start()
ConsumerThread().start()