from subprocess import call;
import re;
dets=[]
fp=open('log1.txt','r')
for line in fp:
    dets=re.findall(r'\w+',line);
    call(["python","sendsms.py",dets[1],"ac holder name:venkata chaitanya gurram"]);
