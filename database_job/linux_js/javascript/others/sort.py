numbers = [11,3,4,2,65,23,2]

""" i=0
while i<(len(numbers)+1):
    if numbers[i]>numbers[i+1]:
        numbers[i]=numbers[i+1]
        numbers[i+1]= numbers[i]
    i+=1
print(numbers)
 """

for i in numbers:
    if numbers[i]<numbers[i+1]:
        numbers[i]=numbers[i+1]
        numbers[i+1]= numbers[i]
    print(numbers)