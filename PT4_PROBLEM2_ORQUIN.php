count = 0
largest = None
smallest = None

for i in range(100, 0, -1):
    for j in range(1, i + 1):
        if j * j == i:
            print(i)
            count += 1

            if largest is None:
                largest = i

            smallest = i
            break

print("Count:", count)
print("Largest:", largest)
print("Smallest:", smallest)