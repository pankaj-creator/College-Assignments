
import java.net.*;
import java.io.*;	
public class tcpEchoServer{
	public static void main(String args[]) throws IOException
	{
		ServerSocket sock=null;
		BufferedReader fromClient=null;
		OutputStreamWriter toClient=null;
		Socket client=null;
		try{
			sock=new ServerSocket(4000);
			System.out.println("Server is ready");
			client=sock.accept();
			System.out.println("Client Connected");
			
			fromClient=new BufferedReader(new InputStreamReader(client.getInputStream()));
			
			toClient=new OutputStreamWriter(client.getOutputStream());
			
			String line;
			while(true)
			{
				line= fromClient.readLine();
				if((line==null)|| line.equals("bye"))
					break;
				System.out.println("Client["+line+"]");
				toClient.write("Server["+line+"]\n");
				toClient.flush();
			}
			fromClient.close();
			toClient.close();
			client.close();
			sock.close();
			System.out.println("Client DisConnected");
		}
		catch(IOException ioe){
			System.err.println(ioe);
		}
	}
}
