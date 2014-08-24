# Gets JSON using Bandcamp, used in seed file to populate the database

class PopulateData
  require 'json'
  require 'open-uri'
  require 'date'
  require 'time'

  def self.albums
    albumContent = JSON.parse open("http://api.bandcamp.com/api/band/3/discography?key=#{BANDCAMP_API_KEY}&band_id=4180852708").read
    puts albumContent
  end


end
