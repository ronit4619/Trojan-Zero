motorcycles = ['honda', 'yamaha', 'suzuki']
print (motorcycles)

#motorcycles[0] = 'ducati' ------------ for replacing an existing value
#print (motorcycles)

motorcycles.append('ducati') #append is used for adding values to end of a list
print (motorcycles)

motors = []
motors.append('ducati')
motors.append('honda')
motors.append('yamaha')
motors.append('suzuki')
print (motors)

bikes = ['honda', 'yamaha', 'suzuki']
bikes.insert(0,'ducati')#use the insert method and the zero to insert the value at the zero position
print (bikes)

parts = ['honda', 'suzuki', 'yahama']
print (parts)
del parts[0]
print (parts)

boaters = ['honda', 'yamaha', 'suzuki', 'wayne']
print (boaters)

popped_boaters = boaters.pop()
print(boaters)
print(popped_boaters.title())

motorcyclesp2 = ['honda', 'yamaha', 'suzuki']
last_owned = motorcyclesp2.pop()
print ('My newest motorcycle was made by ' + last_owned.title() + "!")
first_owned = motorcyclesp2.pop(0)
print ("My oldest motorcycle was made by the company " + first_owned.title())

last = ['honda', 'yamaha', 'suzuki', 'ducati']
print (last)
too_expensive = 'ducati'
last.remove(too_expensive)
print (last)
print ("\nA " + too_expensive.title() + " is too expensive for me")
