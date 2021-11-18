def client_program():
    host = input("Enter host: ")
    port = int(input("Enter port: "))
    client_socket = socket.socket()  # instantiate
    client_socket.connect((host, port))  # connect to the server
    message = input(" -> ")  # take input
    while message.lower().strip() != 'bye':
        client_socket.send(message.encode())  # send message
        data = client_socket.recv(1024).decode()  # receive response
        print('Received from server: ' + data)  # show in terminal
        message = input(" -> ")  # again take input
    client_socket.close()  # close the connection

def server_program():
    host = ''
    port = 5000  # initiate port no above 1024
    server_socket = socket.socket()  # get instance
    server_socket.bind((host, port))  # bind host address and port together
    server_socket.listen(2)  # listen to at max 2 clients
    conn, address = server_socket.accept()  # accept new connection
    print("Connection from: " + str(address))
    while True:
        data = conn.recv(1024).decode()
        if not data:
            break
        print("from connected user: " + str(data))
        data = input(' -> ')
        conn.send(data.encode())
    conn.close()

def armstrong_number(number):
    sum = 0
    temp = number
    while temp > 0:
        digit = temp % 10
        sum += digit ** 3
        temp //= 10
    if number == sum:
        return True
    else:
        return False

def factorial(number):
    if number == 1:
        return 1
    else:
        return number * factorial(number-1)