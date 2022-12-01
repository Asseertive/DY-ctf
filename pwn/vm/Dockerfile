FROM ubuntu:16.04
LABEL maintainer="https://suk.kr"

# 32bit
RUN dpkg --add-architecture i386

RUN apt-get update

# test
#RUN apt-get install -y openssh-server gdb

# 32bit
RUN apt-get install -y libc6:i386 libncurses5:i386 libstdc++6:i386

RUN apt-get install -y xinetd netcat

RUN useradd -d /home/pwn pwn -s /bin/bash
RUN mkdir /home/pwn

RUN chown -R root:pwn /home/pwn
RUN chmod 750 /home/pwn

ADD ./prob/prob /home/pwn/prob
ADD ./prob/flag /flag

RUN chown root:pwn /flag
RUN chmod 440 /flag

ADD ./conf/prob.xinetd /etc/xinetd.d/prob
ADD ./conf/start.sh /start.sh

RUN chmod 755 /start.sh

CMD ["/start.sh"]