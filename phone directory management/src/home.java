

import javax.swing.*;
import java.awt.event.*;
import java.awt.*;
public class home extends JFrame implements ActionListener
{
   JMenu m1,m2,m3;
   JMenuItem bim1,bim2,bba1,bba2,sys,biminfo,bbainfo,bimrecord,bbarecord;
   JMenuBar b;
   
   JLabel l1,l2,l3,l4;
   
                home()
                {
                    setTitle("Phone Directory");
                    setSize(700,500);
                    setBackground(Color.YELLOW);
                    setDefaultCloseOperation(JFrame.HIDE_ON_CLOSE);
                    setLayout(new FlowLayout());
                    l1=new JLabel("KCMIT");
                    l2=new JLabel("");
                    l3=new JLabel("");
                    l4=new JLabel("");
                    
                    l1.setForeground(Color.blue);
                    l1.setFont(new Font("Serif", Font.BOLD, 40));
                    l1.setFont(new Font("Serif",Font.ITALIC, 40));
                    l1.setBounds(50,50, 50, 40);
                    
                    l2.setForeground(Color.red);
                    l2.setFont(new Font("Serif", Font.BOLD, 50));
                    l2.setFont(new Font("Serif",Font.ITALIC, 50));
                    
                    l3.setForeground(Color.blue);
                    l3.setFont(new Font("Serif", Font.BOLD, 30));
                    l3.setFont(new Font("Serif",Font.ITALIC, 30));
                    
                    l4.setForeground(Color.red);
                    l4.setFont(new Font("Serif", Font.BOLD, 25));
                    l4.setFont(new Font("Serif",Font.ITALIC, 25));
                    
                    
                   add(l1);
                   add(l2);
                   add(l3);
                   add(l4);
                     b=new JMenuBar();
                    setJMenuBar(b);
                    m1=new JMenu("BIM");
                    m2=new JMenu("BBA");
                    m3=new JMenu("Window");
                    
                    bim1=new JMenuItem("Create Batch");
                    m1.add(bim1);
                    bim2=new JMenuItem("Delete Batch");
                    m1.add(bim2);
                    
                    
                    bba1=new JMenuItem("Create Batch");
                    m2.add(bba1);
                    bba2=new JMenuItem("Delete Batch");
                    m2.add(bba2);
                    
                    
                    
                    biminfo = new JMenuItem("Batch info");
                    m1.add(biminfo);
                    
                    bbainfo = new JMenuItem("Batch info");
                     m2.add(bbainfo);
                     
                     bimrecord= new JMenuItem("All Records");
                     m1.add(bimrecord);
                     
                     bbarecord= new JMenuItem("All Records");
                     m2.add(bbarecord);

                     
                     sys=new JMenuItem("Exit");
                     m3.add(sys);   
                     
                     b.add(m1);
                      b.add(m2);
                      b.add(m3);
                    
                    setVisible(true);
                    bim1.addActionListener(this);
                    bim2.addActionListener(this);
                    bba1.addActionListener(this);
                    bba2.addActionListener(this);
                    sys.addActionListener(this);
                    biminfo.addActionListener(this);
                    bbainfo.addActionListener(this);
                    bimrecord.addActionListener(this);
                    bbarecord.addActionListener(this);
                    
                }
              
                public void actionPerformed(ActionEvent e)
                {
                    if(e.getSource()==bim1)
                    {
                        new bimcreatebatch();
                        
                    }
                    if(e.getSource()==bim2){
                        new bimdeletebatch();
                    }
                    
                   if(e.getSource()==bba1)
                    {
                        new bbacreatebatch();
                        
                    }
                    if(e.getSource()==bba2){
                        new bbadeletebatch();
                    } 
                     
                    if(e.getSource()==biminfo){
                        new bimbatchinfo();
                    } 
                    
                    if(e.getSource()==bbainfo){
                        new bbabatchinfo();
                    } 
                    
                    if(e.getSource()==bimrecord){
                        new bimrecord();
                    } 
                    
                    if(e.getSource()==bbarecord){
                        new bbarecord();
                    } 
                    
                    
                    if(e.getSource()==sys){
                        dispose();
                    }
                }
                public static void main(String[] args)
                {
              new home();
                 }
}
  