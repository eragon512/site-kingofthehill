def check(n) :
    try :
        return int(n)
    except :
        return n

n = str(input())
n.replace(str(n),'number=','.')
print(check(n))
